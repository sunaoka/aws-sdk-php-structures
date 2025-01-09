<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RetrieveEnvironmentInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 * @property 'tail'|'bundle' $InfoType
 */
class RetrieveEnvironmentInfoRequest extends Request
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
