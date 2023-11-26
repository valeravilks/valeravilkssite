import MicroModal from "micromodal";
export default class {
    constructor()
    {
        console.log('22');

      if (typeof Micromodal === 'undefined') {
        MicroModal.init();

      }

    }
}
