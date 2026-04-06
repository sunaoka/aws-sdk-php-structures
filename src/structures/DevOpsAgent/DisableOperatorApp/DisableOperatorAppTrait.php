<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DisableOperatorApp;

trait DisableOperatorAppTrait
{
    /**
     * @param DisableOperatorAppRequest $args
     * @return void
     */
    public function disableOperatorApp(DisableOperatorAppRequest $args)
    {
        parent::disableOperatorApp($args->toArray());
    }
}
