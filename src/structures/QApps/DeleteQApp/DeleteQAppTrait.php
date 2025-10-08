<?php

namespace Sunaoka\Aws\Structures\QApps\DeleteQApp;

trait DeleteQAppTrait
{
    /**
     * @param DeleteQAppRequest $args
     * @return void
     */
    public function deleteQApp(DeleteQAppRequest $args)
    {
        parent::deleteQApp($args->toArray());
    }
}
