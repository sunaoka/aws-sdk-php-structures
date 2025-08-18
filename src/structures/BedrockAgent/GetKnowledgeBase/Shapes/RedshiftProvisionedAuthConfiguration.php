<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM'|'USERNAME_PASSWORD'|'USERNAME' $type
 * @property string|null $databaseUser
 * @property string|null $usernamePasswordSecretArn
 */
class RedshiftProvisionedAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'IAM'|'USERNAME_PASSWORD'|'USERNAME',
     *     databaseUser?: string|null,
     *     usernamePasswordSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
