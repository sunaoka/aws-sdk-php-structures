<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property DDBELTConnectionOptions|null $ConnectionOptions
 * @property list<GlueSchema>|null $OutputSchemas
 */
class DynamoDBELTConnectorSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionOptions?: DDBELTConnectionOptions|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
