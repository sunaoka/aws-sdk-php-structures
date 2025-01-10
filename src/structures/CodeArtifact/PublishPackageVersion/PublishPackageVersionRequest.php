<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PublishPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property string $packageVersion
 * @property string|resource|\Psr\Http\Message\StreamInterface $assetContent
 * @property string $assetName
 * @property string $assetSHA256
 * @property bool $unfinished
 */
class PublishPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package: string,
     *     packageVersion: string,
     *     assetContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     assetName: string,
     *     assetSHA256: string,
     *     unfinished?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
