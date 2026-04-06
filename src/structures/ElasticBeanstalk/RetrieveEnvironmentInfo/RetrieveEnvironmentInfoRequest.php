<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RetrieveEnvironmentInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 * @property 'tail'|'bundle' $InfoType
 */
class RetrieveEnvironmentInfoRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null,
     *     InfoType: 'tail'|'bundle'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
