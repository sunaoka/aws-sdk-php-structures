<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShareAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRINCIPAL'|'RESOURCE' $associationType
 * @property list<string>|null $resourceShareArns
 * @property string|null $resourceArn
 * @property string|null $principal
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|null $associationStatus
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class GetResourceShareAssociationsRequest extends Request
{
    /**
     * @param array{
     *     associationType: 'PRINCIPAL'|'RESOURCE',
     *     resourceShareArns?: list<string>|null,
     *     resourceArn?: string|null,
     *     principal?: string|null,
     *     associationStatus?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
