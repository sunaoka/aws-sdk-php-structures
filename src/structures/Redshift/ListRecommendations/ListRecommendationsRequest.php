<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $NamespaceArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     NamespaceArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
