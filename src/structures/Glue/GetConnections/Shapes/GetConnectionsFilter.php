<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MatchCriteria
 * @property 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|null $ConnectionType
 */
class GetConnectionsFilter extends Shape
{
    /**
     * @param array{
     *     MatchCriteria?: list<string>|null,
     *     ConnectionType?: 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
