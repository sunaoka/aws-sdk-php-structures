<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersionsDiff;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property Shapes\SchemaVersionNumber $FirstSchemaVersionNumber
 * @property Shapes\SchemaVersionNumber $SecondSchemaVersionNumber
 * @property 'SYNTAX_DIFF' $SchemaDiffType
 */
class GetSchemaVersionsDiffRequest extends Request
{
    /**
     * @param array{
     *     SchemaId: Shapes\SchemaId,
     *     FirstSchemaVersionNumber: Shapes\SchemaVersionNumber,
     *     SecondSchemaVersionNumber: Shapes\SchemaVersionNumber,
     *     SchemaDiffType: 'SYNTAX_DIFF'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
