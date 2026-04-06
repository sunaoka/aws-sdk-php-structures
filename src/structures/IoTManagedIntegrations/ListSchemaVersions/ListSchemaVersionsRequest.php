<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'capability'|'definition' $Type
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $SchemaId
 * @property string|null $Namespace
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 * @property string|null $SemanticVersion
 */
class ListSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     Type: 'capability'|'definition',
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     SchemaId?: string|null,
     *     Namespace?: string|null,
     *     Visibility?: 'PUBLIC'|'PRIVATE'|null,
     *     SemanticVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
