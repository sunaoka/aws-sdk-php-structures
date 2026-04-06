<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSessionData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property list<Shapes\RuntimeSessionData> $data
 * @property 'Custom'|null $namespace
 * @property string $sessionId
 */
class UpdateSessionDataRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     data: list<Shapes\RuntimeSessionData>,
     *     namespace?: 'Custom'|null,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
