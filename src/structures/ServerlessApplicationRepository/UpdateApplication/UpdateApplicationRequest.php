<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $Author
 * @property string|null $Description
 * @property string|null $HomePageUrl
 * @property list<string>|null $Labels
 * @property string|null $ReadmeBody
 * @property string|null $ReadmeUrl
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Author?: string|null,
     *     Description?: string|null,
     *     HomePageUrl?: string|null,
     *     Labels?: list<string>|null,
     *     ReadmeBody?: string|null,
     *     ReadmeUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
