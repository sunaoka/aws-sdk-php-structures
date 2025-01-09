<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $Description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
