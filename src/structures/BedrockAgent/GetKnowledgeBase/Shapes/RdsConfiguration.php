<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialsSecretArn
 * @property string $databaseName
 * @property RdsFieldMapping $fieldMapping
 * @property string $resourceArn
 * @property string $tableName
 */
class RdsConfiguration extends Shape
{
    /**
     * @param array{
     *     credentialsSecretArn: string,
     *     databaseName: string,
     *     fieldMapping: RdsFieldMapping,
     *     resourceArn: string,
     *     tableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
