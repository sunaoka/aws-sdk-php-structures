<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudId
 * @property string|null $ProjectKey
 * @property string|null $Domain
 * @property string|null $AuthUrl
 * @property 'ACTIVE'|'FAILED'|null $AuthStatus
 */
class JiraCloudDetail extends Shape
{
    /**
     * @param array{
     *     CloudId?: string|null,
     *     ProjectKey?: string|null,
     *     Domain?: string|null,
     *     AuthUrl?: string|null,
     *     AuthStatus?: 'ACTIVE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
