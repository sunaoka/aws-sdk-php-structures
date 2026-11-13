<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\CreateAirflowUiUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 300>|null $ExpiresInSeconds
 * @property int<1, 43200>|null $SessionDurationInSeconds
 */
class CreateAirflowUiUrlRequest extends Request
{
    /**
     * @param array{
     *     ExpiresInSeconds?: int<5, 300>|null,
     *     SessionDurationInSeconds?: int<1, 43200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
