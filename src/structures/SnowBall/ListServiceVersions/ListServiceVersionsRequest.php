<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'KUBERNETES'|'EKS_ANYWHERE' $ServiceName
 * @property list<Shapes\DependentService>|null $DependentServices
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListServiceVersionsRequest extends Request
{
    /**
     * @param array{
     *     ServiceName: 'KUBERNETES'|'EKS_ANYWHERE',
     *     DependentServices?: list<Shapes\DependentService>|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
