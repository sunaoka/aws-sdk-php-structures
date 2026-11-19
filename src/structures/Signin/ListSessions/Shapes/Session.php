<?php

namespace Sunaoka\Aws\Structures\Signin\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionArn
 * @property string $principalArn
 * @property string|null $role
 * @property 'ACTIVE'|'REVOKED'|null $status
 * @property int $issuedAt
 * @property int $expiresAt
 * @property string|null $clientId
 * @property 'CLI'|'MCP'|null $clientType
 * @property string|null $resource
 */
class Session extends Shape
{
    /**
     * @param array{
     *     sessionArn: string,
     *     principalArn: string,
     *     role?: string|null,
     *     status?: 'ACTIVE'|'REVOKED'|null,
     *     issuedAt: int,
     *     expiresAt: int,
     *     clientId?: string|null,
     *     clientType?: 'CLI'|'MCP'|null,
     *     resource?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
