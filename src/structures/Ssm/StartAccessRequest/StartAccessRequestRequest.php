<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAccessRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Reason
 * @property list<Shapes\Target> $Targets
 * @property list<Shapes\Tag>|null $Tags
 */
class StartAccessRequestRequest extends Request
{
    /**
     * @param array{
     *     Reason: string,
     *     Targets: list<Shapes\Target>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
