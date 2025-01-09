<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'KUBERNETES'|'EKS_ANYWHERE' $ServiceName
 * @property list<Shapes\DependentService> $DependentServices
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListServiceVersionsRequest extends Request
{
    /**
     * @param array{
     *     ServiceName: 'KUBERNETES'|'EKS_ANYWHERE',
     *     DependentServices?: list<Shapes\DependentService>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
