<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property bool|null $DeleteSourceBundle
 */
class DeleteApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     VersionLabel: string,
     *     DeleteSourceBundle?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
