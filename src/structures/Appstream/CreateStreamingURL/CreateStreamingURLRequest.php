<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStreamingURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $FleetName
 * @property string $UserId
 * @property string|null $ApplicationId
 * @property int|null $Validity
 * @property string|null $SessionContext
 */
class CreateStreamingURLRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FleetName: string,
     *     UserId: string,
     *     ApplicationId?: string|null,
     *     Validity?: int|null,
     *     SessionContext?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
