<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensionAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceIdentifier
 * @property string|null $ExtensionIdentifier
 * @property int|null $ExtensionVersionNumber
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExtensionAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier?: string|null,
     *     ExtensionIdentifier?: string|null,
     *     ExtensionVersionNumber?: int|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
