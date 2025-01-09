<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeletePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $ClientToken
 */
class DeletePartnerAppRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
