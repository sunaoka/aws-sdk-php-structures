<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PublishPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 * @property string $packageVersion
 * @property string|resource|\Psr\Http\Message\StreamInterface $assetContent
 * @property string $assetName
 * @property string $assetSHA256
 * @property bool|null $unfinished
 */
class PublishPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string,
     *     packageVersion: string,
     *     assetContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     assetName: string,
     *     assetSHA256: string,
     *     unfinished?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
