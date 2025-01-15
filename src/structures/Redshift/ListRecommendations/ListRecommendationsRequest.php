<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $NamespaceArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     NamespaceArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
