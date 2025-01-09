<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensionAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property string $ExtensionIdentifier
 * @property int $ExtensionVersionNumber
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListExtensionAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier?: string,
     *     ExtensionIdentifier?: string,
     *     ExtensionVersionNumber?: int,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
