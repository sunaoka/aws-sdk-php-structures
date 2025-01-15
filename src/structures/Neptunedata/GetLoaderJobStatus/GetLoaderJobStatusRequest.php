<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetLoaderJobStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadId
 * @property bool|null $details
 * @property bool|null $errors
 * @property int<1, max>|null $page
 * @property int<1, max>|null $errorsPerPage
 */
class GetLoaderJobStatusRequest extends Request
{
    /**
     * @param array{
     *     loadId: string,
     *     details?: bool|null,
     *     errors?: bool|null,
     *     page?: int<1, max>|null,
     *     errorsPerPage?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
