<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property bool|null $TerminateEnvByForce
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TerminateEnvByForce?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
