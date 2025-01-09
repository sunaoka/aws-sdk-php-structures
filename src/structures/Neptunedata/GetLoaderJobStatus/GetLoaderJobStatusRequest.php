<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetLoaderJobStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadId
 * @property bool $details
 * @property bool $errors
 * @property int<1, max> $page
 * @property int<1, max> $errorsPerPage
 */
class GetLoaderJobStatusRequest extends Request
{
    /**
     * @param array{
     *     loadId: string,
     *     details?: bool,
     *     errors?: bool,
     *     page?: int<1, max>,
     *     errorsPerPage?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
