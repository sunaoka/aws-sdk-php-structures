<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseUser
 * @property 'IAM'|'USERNAME_PASSWORD'|'USERNAME' $type
 * @property string $usernamePasswordSecretArn
 */
class RedshiftProvisionedAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseUser?: string,
     *     type: 'IAM'|'USERNAME_PASSWORD'|'USERNAME',
     *     usernamePasswordSecretArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
