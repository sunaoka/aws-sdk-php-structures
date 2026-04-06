<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $countryCode
 * @property string|null $description
 */
class UpdateSiteRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     countryCode?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
