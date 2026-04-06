<?php

namespace Sunaoka\Aws\Structures\Mobile\ExportBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bundleId
 * @property string|null $projectId
 * @property 'OSX'|'WINDOWS'|'LINUX'|'OBJC'|'SWIFT'|'ANDROID'|'JAVASCRIPT'|null $platform
 */
class ExportBundleRequest extends Request
{
    /**
     * @param array{
     *     bundleId: string,
     *     projectId?: string|null,
     *     platform?: 'OSX'|'WINDOWS'|'LINUX'|'OBJC'|'SWIFT'|'ANDROID'|'JAVASCRIPT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
