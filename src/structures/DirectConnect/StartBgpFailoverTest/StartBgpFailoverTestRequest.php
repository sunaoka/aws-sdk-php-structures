<?php

namespace Sunaoka\Aws\Structures\DirectConnect\StartBgpFailoverTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property list<string>|null $bgpPeers
 * @property int|null $testDurationInMinutes
 */
class StartBgpFailoverTestRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     bgpPeers?: list<string>|null,
     *     testDurationInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
