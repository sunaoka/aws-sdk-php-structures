<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ConnectDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string>|null $CustomerDnsIps
 * @property list<string>|null $CustomerDnsIpsV6
 * @property string $CustomerUserName
 */
class DirectoryConnectSettings extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     CustomerDnsIps?: list<string>|null,
     *     CustomerDnsIpsV6?: list<string>|null,
     *     CustomerUserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
