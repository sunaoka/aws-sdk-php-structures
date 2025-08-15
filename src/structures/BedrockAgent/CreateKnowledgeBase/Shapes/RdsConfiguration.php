<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $credentialsSecretArn
 * @property string $databaseName
 * @property string $tableName
 * @property RdsFieldMapping $fieldMapping
 */
class RdsConfiguration extends Shape
{
    /**
     * @param array{
     *     resourceArn: string,
     *     credentialsSecretArn: string,
     *     databaseName: string,
     *     tableName: string,
     *     fieldMapping: RdsFieldMapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
