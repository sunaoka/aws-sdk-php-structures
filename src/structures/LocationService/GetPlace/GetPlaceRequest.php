<?php

namespace Sunaoka\Aws\Structures\LocationService\GetPlace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string|null $Key
 * @property string|null $Language
 * @property string $PlaceId
 */
class GetPlaceRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Key?: string|null,
     *     Language?: string|null,
     *     PlaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
