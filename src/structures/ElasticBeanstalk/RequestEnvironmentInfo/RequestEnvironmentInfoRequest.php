<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RequestEnvironmentInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 * @property 'tail'|'bundle' $InfoType
 */
class RequestEnvironmentInfoRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string,
     *     EnvironmentName?: string,
     *     InfoType: 'tail'|'bundle'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
