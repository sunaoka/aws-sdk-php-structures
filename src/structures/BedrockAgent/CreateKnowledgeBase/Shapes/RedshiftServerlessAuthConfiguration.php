<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM'|'USERNAME_PASSWORD' $type
 * @property string $usernamePasswordSecretArn
 */
class RedshiftServerlessAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'IAM'|'USERNAME_PASSWORD',
     *     usernamePasswordSecretArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
