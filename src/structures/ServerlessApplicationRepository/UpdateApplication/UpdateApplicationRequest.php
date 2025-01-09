<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $Author
 * @property string $Description
 * @property string $HomePageUrl
 * @property list<string> $Labels
 * @property string $ReadmeBody
 * @property string $ReadmeUrl
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Author?: string,
     *     Description?: string,
     *     HomePageUrl?: string,
     *     Labels?: list<string>,
     *     ReadmeBody?: string,
     *     ReadmeUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
