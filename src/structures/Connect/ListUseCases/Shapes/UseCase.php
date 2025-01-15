<?php

namespace Sunaoka\Aws\Structures\Connect\ListUseCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UseCaseId
 * @property string|null $UseCaseArn
 * @property 'RULES_EVALUATION'|'CONNECT_CAMPAIGNS'|null $UseCaseType
 */
class UseCase extends Shape
{
    /**
     * @param array{
     *     UseCaseId?: string|null,
     *     UseCaseArn?: string|null,
     *     UseCaseType?: 'RULES_EVALUATION'|'CONNECT_CAMPAIGNS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
