<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RequestEnvironmentInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 * @property 'tail'|'bundle'|'analyze' $InfoType
 */
class RequestEnvironmentInfoRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null,
     *     InfoType: 'tail'|'bundle'|'analyze'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
