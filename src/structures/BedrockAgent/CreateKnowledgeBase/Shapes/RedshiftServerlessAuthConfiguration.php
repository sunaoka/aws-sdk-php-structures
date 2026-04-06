<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM'|'USERNAME_PASSWORD' $type
 * @property string|null $usernamePasswordSecretArn
 */
class RedshiftServerlessAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'IAM'|'USERNAME_PASSWORD',
     *     usernamePasswordSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
