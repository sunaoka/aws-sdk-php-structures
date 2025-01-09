<?php

namespace Sunaoka\Aws\Structures\DirectConnect\StartBgpFailoverTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property list<string> $bgpPeers
 * @property int $testDurationInMinutes
 */
class StartBgpFailoverTestRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     bgpPeers?: list<string>,
     *     testDurationInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
