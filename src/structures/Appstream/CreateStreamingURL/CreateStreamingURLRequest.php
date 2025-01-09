<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStreamingURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $FleetName
 * @property string $UserId
 * @property string $ApplicationId
 * @property int $Validity
 * @property string $SessionContext
 */
class CreateStreamingURLRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FleetName: string,
     *     UserId: string,
     *     ApplicationId?: string,
     *     Validity?: int,
     *     SessionContext?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
