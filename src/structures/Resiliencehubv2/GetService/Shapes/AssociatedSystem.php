<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $systemArn
 * @property string|null $systemName
 * @property list<string>|null $userJourneyIds
 */
class AssociatedSystem extends Shape
{
    /**
     * @param array{
     *     systemArn: string,
     *     systemName?: string|null,
     *     userJourneyIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
