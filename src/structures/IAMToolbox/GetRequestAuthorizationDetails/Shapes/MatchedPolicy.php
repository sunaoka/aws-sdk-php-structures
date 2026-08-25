<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 * @property list<MatchedStatement>|null $matchedStatements
 */
class MatchedPolicy extends Shape
{
    /**
     * @param array{
     *     uri: string,
     *     matchedStatements?: list<MatchedStatement>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
