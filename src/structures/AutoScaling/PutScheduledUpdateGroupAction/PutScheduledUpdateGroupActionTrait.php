<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScheduledUpdateGroupAction;

trait PutScheduledUpdateGroupActionTrait
{
    /**
     * @param PutScheduledUpdateGroupActionRequest $args
     * @return void
     */
    public function putScheduledUpdateGroupAction(PutScheduledUpdateGroupActionRequest $args)
    {
        parent::putScheduledUpdateGroupAction($args->toArray());
    }
}
