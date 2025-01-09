<?php

namespace Sunaoka\Aws\Structures\Connect\ListUseCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UseCaseId
 * @property string $UseCaseArn
 * @property 'RULES_EVALUATION'|'CONNECT_CAMPAIGNS' $UseCaseType
 */
class UseCase extends Shape
{
    /**
     * @param array{
     *     UseCaseId?: string,
     *     UseCaseArn?: string,
     *     UseCaseType?: 'RULES_EVALUATION'|'CONNECT_CAMPAIGNS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
