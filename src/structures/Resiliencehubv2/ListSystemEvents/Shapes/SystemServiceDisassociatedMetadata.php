<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceName
 * @property string|null $serviceArn
 * @property list<string>|null $userJourneysAffected
 * @property string|null $comment
 */
class SystemServiceDisassociatedMetadata extends Shape
{
    /**
     * @param array{
     *     serviceName?: string|null,
     *     serviceArn?: string|null,
     *     userJourneysAffected?: list<string>|null,
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
