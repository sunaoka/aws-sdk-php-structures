<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShareAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRINCIPAL'|'RESOURCE' $associationType
 * @property list<string> $resourceShareArns
 * @property string $resourceArn
 * @property string $principal
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED' $associationStatus
 * @property string $nextToken
 * @property int $maxResults
 */
class GetResourceShareAssociationsRequest extends Request
{
    /**
     * @param array{
     *     associationType: 'PRINCIPAL'|'RESOURCE',
     *     resourceShareArns?: list<string>,
     *     resourceArn?: string,
     *     principal?: string,
     *     associationStatus?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
