<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetLoaderJobStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadId
 * @property bool $details
 * @property bool $errors
 * @property int $page
 * @property int $errorsPerPage
 */
class GetLoaderJobStatusRequest extends Request
{
    /**
     * @param array{
     *     loadId: string,
     *     details?: bool,
     *     errors?: bool,
     *     page?: int,
     *     errorsPerPage?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
