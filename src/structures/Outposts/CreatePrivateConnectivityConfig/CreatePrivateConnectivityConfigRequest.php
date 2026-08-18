<?php

namespace Sunaoka\Aws\Structures\Outposts\CreatePrivateConnectivityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property list<Shapes\VpcInformation> $VpcInformationList
 */
class CreatePrivateConnectivityConfigRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     VpcInformationList: list<Shapes\VpcInformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
