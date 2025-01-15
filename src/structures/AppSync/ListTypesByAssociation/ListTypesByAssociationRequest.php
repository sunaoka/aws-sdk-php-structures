<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypesByAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mergedApiIdentifier
 * @property string $associationId
 * @property 'SDL'|'JSON' $format
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListTypesByAssociationRequest extends Request
{
    /**
     * @param array{
     *     mergedApiIdentifier: string,
     *     associationId: string,
     *     format: 'SDL'|'JSON',
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
