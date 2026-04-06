<?php

namespace Sunaoka\Aws\Structures\Emr\UpdateStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<string>|null $SubnetIds
 * @property string|null $DefaultS3Location
 */
class UpdateStudioRequest extends Request
{
    /**
     * @param array{
     *     StudioId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     SubnetIds?: list<string>|null,
     *     DefaultS3Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
