<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypesByAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mergedApiIdentifier
 * @property string $associationId
 * @property 'SDL'|'JSON' $format
 * @property string $nextToken
 * @property int<0, 25> $maxResults
 */
class ListTypesByAssociationRequest extends Request
{
    /**
     * @param array{
     *     mergedApiIdentifier: string,
     *     associationId: string,
     *     format: 'SDL'|'JSON',
     *     nextToken?: string,
     *     maxResults?: int<0, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
