<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCompilationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompilationJobName
 * @property string $CompilationJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompilationStartTime
 * @property \Aws\Api\DateTimeResult|null $CompilationEndTime
 * @property 'lambda'|'ml_m4'|'ml_m5'|'ml_m6g'|'ml_c4'|'ml_c5'|'ml_c6g'|'ml_p2'|'ml_p3'|'ml_g4dn'|'ml_inf1'|'ml_inf2'|'ml_trn1'|'ml_eia2'|'jetson_tx1'|'jetson_tx2'|'jetson_nano'|'jetson_xavier'|'rasp3b'|'rasp4b'|'imx8qm'|'deeplens'|'rk3399'|'rk3288'|'aisage'|'sbe_c'|'qcs605'|'qcs603'|'sitara_am57x'|'amba_cv2'|'amba_cv22'|'amba_cv25'|'x86_win32'|'x86_win64'|'coreml'|'jacinto_tda4vm'|'imx8mplus'|null $CompilationTargetDevice
 * @property 'ANDROID'|'LINUX'|null $CompilationTargetPlatformOs
 * @property 'X86_64'|'X86'|'ARM64'|'ARM_EABI'|'ARM_EABIHF'|null $CompilationTargetPlatformArch
 * @property 'INTEL_GRAPHICS'|'MALI'|'NVIDIA'|'NNA'|null $CompilationTargetPlatformAccelerator
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED' $CompilationJobStatus
 */
class CompilationJobSummary extends Shape
{
    /**
     * @param array{
     *     CompilationJobName: string,
     *     CompilationJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CompilationStartTime?: \Aws\Api\DateTimeResult|null,
     *     CompilationEndTime?: \Aws\Api\DateTimeResult|null,
     *     CompilationTargetDevice?: 'lambda'|'ml_m4'|'ml_m5'|'ml_m6g'|'ml_c4'|'ml_c5'|'ml_c6g'|'ml_p2'|'ml_p3'|'ml_g4dn'|'ml_inf1'|'ml_inf2'|'ml_trn1'|'ml_eia2'|'jetson_tx1'|'jetson_tx2'|'jetson_nano'|'jetson_xavier'|'rasp3b'|'rasp4b'|'imx8qm'|'deeplens'|'rk3399'|'rk3288'|'aisage'|'sbe_c'|'qcs605'|'qcs603'|'sitara_am57x'|'amba_cv2'|'amba_cv22'|'amba_cv25'|'x86_win32'|'x86_win64'|'coreml'|'jacinto_tda4vm'|'imx8mplus'|null,
     *     CompilationTargetPlatformOs?: 'ANDROID'|'LINUX'|null,
     *     CompilationTargetPlatformArch?: 'X86_64'|'X86'|'ARM64'|'ARM_EABI'|'ARM_EABIHF'|null,
     *     CompilationTargetPlatformAccelerator?: 'INTEL_GRAPHICS'|'MALI'|'NVIDIA'|'NNA'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     CompilationJobStatus: 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
