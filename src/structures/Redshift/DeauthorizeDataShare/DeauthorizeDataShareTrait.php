<?php

namespace Sunaoka\Aws\Structures\Redshift\DeauthorizeDataShare;

trait DeauthorizeDataShareTrait
{
    /**
     * @param DeauthorizeDataShareRequest $args
     * @return DeauthorizeDataShareResponse
     */
    public function deauthorizeDataShare(DeauthorizeDataShareRequest $args)
    {
        $result = parent::deauthorizeDataShare($args->toArray());
        return new DeauthorizeDataShareResponse($result->toArray());
    }
}
