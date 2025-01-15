<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property string|null $Description
 */
class UpdateApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     VersionLabel: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
